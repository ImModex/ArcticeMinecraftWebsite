<?php

const captionsFile = "images/captions.ini";

class Image
{
    public $source;
    public $caption;

    function __construct($source, $caption)
    {
        $this->source = $source;
        $this->caption = $caption;
    }
}

function getImages($feature)
{
    $content = parse_ini_file(captionsFile, TRUE);
    $ret = [];
    if (isset($content[$feature]))
        foreach ($content[$feature] as $image) {
            array_push($ret, new Image("images/" . $image['source'], $image['caption']));
        }

    return $ret;
}

function debug_to_console($data)
{
    echo "<script>console.log(" . json_encode($data) . ");</script>";
}

function printImages($feature)
{
    $images = getImages($feature);
    if (isset($images)) {

        echo "<div class=\"feature-images\">";
        $index = 0;
        $length = count($images);
        foreach ($images as $image) {
            ++$index;
            $source = $image->source;
            $caption = $image->caption;
            echo "
            <div class=\"feature-image-slides fade show\">";

            if ($length > 1)
                echo "<div class=\"feature-image-page\" style=\"display:none\">$index / $length</div>";

            echo "<a href=\"$source\"><img src=\"$source\" style=\"width:100%\"></a>
                <div class=\"feature-image-caption\" style=\"display:none\">$caption</div>
            </div>
            ";
        }
        if ($length > 1) {
            echo "
            <a class=\"feature-image-prev\" onclick=\"plusSlides('$feature', -1)\">&#10094;</a>
            <a class=\"feature-image-next\" onclick=\"plusSlides('$feature', 1)\">&#10095;</a>
            <br>
            ";
            echo "<div class=\"feature-image-dot-container\"style=\"text-align:center\">";
            for ($i = 1; $i < $length+1; $i++) {
                echo "<span class=\"feature-image-dot\" onclick=\"currentSlide('$feature', $i)\"></span>";
            }
            echo "</div>";
            echo "</div>";
        } else {
            echo "</div>";
        }
    }

    unset($feature, $images);
}
