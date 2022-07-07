<?php
include_once '../imp/header.php';
include_once '../imp/navbar.php';
include_once 'files.php';
?>

<style>
    #nav-features .nav-item {
        color: lightgreen;
        background-color: rgba(144, 238, 144, 0.1);
    }
</style>

<script src="../imp/images.js"></script>

<body>
    <div class='feature-listContainer'>
        <ul class='feature-list'>
            <div class='featureContainer'>
                <li id='ranks' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Ranks - JoinQuit - Chat - Tablist
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Rank system including join and quit message, better looking chat + chat colors and colored name in tablist
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("ranks");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='silkSpawners' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                SilkSpawners
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                You can now mine Spawners with a silk touch pickaxe!
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("silkSpawners");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='betterCreepers' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                "Better" Creepers
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Creepers will no longer break blocks, though they will do twice the damage!
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("betterCreepers");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='deathCoords' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Death Coordinates
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Ever died and didn't know where? Not anymore.
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("deathCoords");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='factionScythe' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Faction Scythe
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Replanting crops is way too much work. Simply harvest them with your hoe and they get replanted automatically (fortune works too)
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("factionScythe");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='bowMendingInfinity' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Infinity + Mending on a Bow
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Constantly having to repair is annoying. Just slap Mending on an Infinity bow (in that order) and get rid of that problem
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("bowMendingInfinity");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='beaconRange' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Beacon Range
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Beacons now have 5x of the Vanilla range, so a max tier beacon reaches 250 blocks!
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("beaconRange");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='villagerTweaks' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Villager Tweaks
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Bookshelves can be placed in a 6x6x6 area around the Enchanter, doesn't matter if blocks are inbetween or not
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("villagerTweaks");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='betterEnchanter' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Better Enchanter
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Infinite Mending books from Villagers is cringe, so I fixed it
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("betterEnchanter");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='itemRepairTweaks' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Item Repair Tweaks
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Since Mending does not exist, repairing items will not get more expensive per repair. Thank me later
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("itemRepairTweaks");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='endermanFix' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Enderman Fix
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Endermen cannot despawn when holding a block, if they don't find a place to put it back down, <br>they will never despawn. Begone bitch
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("endermanFix");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='nick' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Nick
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Colored Name? Don't want to be called xXiTzHahaLolPvPXx anymore? /nick :)
                                <br><br>
                                ./nick &1Modex
                                Is dark blue Modex
                                <br>
                                ./nick &1M&2o&3d&4e&5x
                                Is rainbow
                                <br>
                                ./nick &l&o&4Modex
                                is bold italic dark red modex
                                <br>
                                Hex codes are also supported now, for example "#ff006bModex" would result in me having a pinkish name
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("nick");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='spawnable' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                Spawnable (use with caution)
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Want some help with outlines or spawning areas when building farms? This is it<br><br>
                                /spawnable [radius, min=0, max=128] [Mode, default=All] [show-spawnable-blocks, default=true]<br>

                                So for example<br>

                                /spawnable 25 All true <- would draw square, circle and sphere with 25 blocks radius + emerald blocks on all spawnable blocks<br>

                                /spawnable 50 Circle false <- would draw a circle with 50 blocks radius without showing spawnable blocks<br>

                                /spawnable 128 <- would draw square, circle and sphere with 128 blocks radius with showing spawnable blocks<br>

                                /spawnable 600 Sphere <- would draw a sphere with 128 blocks radius with showing spawnable blocks<br>

                                Note that the spawnable blocks (emerald blocks) will always be placed on the largest area used so Square > Circle > Sphere
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("spawnable");
                    ?>
                </li>
            </div>
            <div class='featureContainer'>
                <li id='afk' class='feature'>
                    <div class="feature-text">
                        <div class='feature-title'>
                            <p>
                                AFK
                            </p>
                        </div>

                        <div class='feature-description'>
                            <p>
                                Once you are gone for more than 1min, you will appear as AFK.<br>
                                AFK players are ignored in the sleeping limit (50% of online, active players)<br><br>
                                You can set yourself as AFK by using /afk
                            </p>
                        </div>
                    </div>

                    <?php
                    printImages("afk");
                    ?>
                </li>
            </div>
        </ul>
    </div>

</body>
<?php
include_once '../imp/footer.php';
?>