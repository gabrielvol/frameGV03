<?php $navItemInicio = ($navCurrent == 0)? "displayNone" : ""; ?>

<li class="displayNoneAT <?php if($navCurrent == 0) { echo 'displayNone'; } ?>">
    <a href="/nuevo/" class="<?php if ($navHorizontalCenterAT == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox" <?php if($navCurrent == 0) { echo 'aria-current="page"'; } ?>>
        <?php echo _("Inicio"); ?></a>
</li>
<li class="<?php if($navCurrent == 1) { echo 'current'; } ?>">
    <a href="/nuevo/" class="<?php if ($navHorizontalCenterAT == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox" <?php if($navCurrent == 1) { echo 'aria-current="page"'; } ?>>
        <?php echo _("seccion"); ?></a>
</li>
<li class="liNoLink">
    <a href="<?php if($int == 1) { echo '/nuevo/index.php'; } ?>#seccion" class="<?php if ($navHorizontalCenterAT == 1) { echo 'displayBlockBT'; } else { echo 'displayBlock'; } ?> borderBox">
        <?php echo _("seccion"); ?></a>
</li>


// Sub Level 1
<li class="nos hasSub hasSubLevel1 pRel <?php if($navCurrent == 2) { echo 'current'; }?>">
    <p class="topLevelItem TLILevel1 borderBox" id="nosNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nosSubMenu" class="subMenu subMenuLevel1 unstyled" role="group" aria-expanded="false" aria-labelledby="nosNavItem">
        <li class="<?php if($navCurrentInt == 200) { echo 'current'; } ?>">
            <a href="/nuevo/" class="displayBlock borderBox" <?php if($navCurrentInt == 200) { echo 'aria-current="page"'; } ?>>
                <?php echo _("Historia"); ?></a>
        </li>
    </ul>
</li>


// Sub Level 2
<li class="nos hasSub hasSubLevel1 pRel <?php if($navCurrent == 2) { echo 'current'; }?>">
    <p class="topLevelItem TLILevel1 borderBox" id="nosNavItem" aria-haspopup="true" aria-owns="nosSubMenu" aria-controls="nosSubMenu" role="button" aria-pressed="false">
        <?php echo _("Nosotros"); ?>
    </p>
    <ul id="nosSubMenu" class="subMenu subMenuLevel1 unstyled" role="group" aria-expanded="false" aria-labelledby="nosNavItem">
        <li class="hasSub hasSubLevel2 <?php if($navCurrentInt == 210) { echo 'current'; } ?>">
            <p class="topLevelItem TLILevel2 borderBox" id="hisNavItem" aria-haspopup="true" aria-owns="hisSubMenu" aria-controls="hisSubMenu" role="button" aria-pressed="false">
                <?php echo _("Historia"); ?>
            </p>
            <ul id="hisSubMenu" class="subMenu subMenuLevel2 unstyled" role="group" aria-expanded="false" aria-labelledby="hisNavItem">
                <li class="<?php if($navCurrentInt == 211) { echo 'current'; } ?>">
                    <a href="/nuevo/" class="displayBlock borderBox" <?php if($navCurrentInt == 211) { echo 'aria-current="page"'; } ?>>
                        <?php echo _("Comienzos"); ?></a>
                </li>
            </ul>    
        </li>
    </ul>
</li>