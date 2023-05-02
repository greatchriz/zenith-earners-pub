{extends file="layout.tpl"}

{block name=nav}
     <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-transparent"
    >

    {include file="layout-nav.tpl"}
    
        </header><!-- End Header -->

{/block}


{block name=hero}

    {include file="sections/home/hero.tpl"}

{/block}

{block name=section}

      {include file="sections/home/services.tpl"}
      {include file="sections/home/why-us.tpl"}
      {include file="sections/home/features.tpl"}
    
{/block}
