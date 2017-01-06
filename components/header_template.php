<div class="header__menu">
    <ul class="header__menu-list">
        <?foreach($tree as $item):?>
        <li class="header__menu-item"> <a href="<?=$this->lang.$item['link']?>"><?=$item['title_'.$this->langPrefix]?></a>
            <?if(!empty($item['childs'])): ?>
            <ul class="header__submenu header__submenu_multi-col">
                <li class="header__submenu-col">
                    <? $i=0; ?>
                    <?foreach($item['childs'] as $itemChild): ?>
                        <? if (!($i & 1)):?>
                            <div class="header__submenu-item header__submenu-item_title">
                                <a href="<?=$this->lang.$itemChild['link']?>"><?=$itemChild['title_'.$this->langPrefix]?></a>
                            </div>
                            <?if(!empty($itemChild['childs'])):?>
                                <?foreach($itemChild['childs'] as $itemChildChild):?>
                                    <div class="header__submenu-item">
                                        <a href="<?=$this->lang.$itemChildChild['link']?>"><?=$itemChildChild['title_'.$this->langPrefix]?></a>
                                    </div>
                                <?endforeach;?>
                            <?endif;?>
                        <?endif;?>
                        <? $i++;?>
                    <?endforeach;?>
                </li>
                <li class="header__submenu-col">
                    <? $i=0; ?>
                    <?foreach($item['childs'] as $itemChild): ?>
                        <? if ($i & 1):?>
                            <div class="header__submenu-item header__submenu-item_title">
                                <a href="<?=$this->lang.$itemChild['link']?>"><?=$itemChild['title_'.$this->langPrefix]?></a>
                            </div>
                            <?if(!empty($itemChild['childs'])):?>
                                <?foreach($itemChild['childs'] as $itemChildChild):?>
                                    <div class="header__submenu-item">
                                        <a href="<?=$this->lang.$itemChildChild['link']?>"><?=$itemChildChild['title_'.$this->langPrefix]?></a>
                                    </div>
                                <?endforeach;?>
                            <?endif;?>
                        <?endif;?>
                        <? $i++;?>
                    <?endforeach;?>
                </li>
            </ul>
            <?endif;?>
        </li>
        <?endforeach;?>
    </ul>
</div>