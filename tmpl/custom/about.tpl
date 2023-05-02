{extends file="layout.tpl"}

{block name=nav}
     <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center"
    >

    {include file="layout-nav.tpl"}
    
        </header><!-- End Header -->

{/block}

{block name=section}

      {include file="sections/about/breadcrumbs.tpl"}
      {include file="sections/about/about.tpl"}
      {include file="sections/about/facts.tpl"}
      {include file="sections/about/skills.tpl"}
      {include file="sections/about/testimonials.tpl"}
    
{/block}
