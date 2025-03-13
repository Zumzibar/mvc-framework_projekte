<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <i class="bi bi-android" style="font-size: 40px; color: white; margin-left: 30px;  margin-right: -30px; padding" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"></i>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {foreach from=$Menue item=item}
                    <li class="nav-item">
                        <a class="nav-link {if $ActiveItem === $item.controllerName}active{/if}" href="{$item.href}">{$item.button}</a>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Your main content goes here -->
    </div>


<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" style="background-color: #1a1d20" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSidebarLabel" style="color:white">Sidebar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Sidebar content goes here -->
        <ul class="navbar-nav">
            {foreach from=$Menue item=item}
            <li class="nav-item">
                <a class="nav-link {if $ActiveItem === $item.controllerName}active{/if}" href="{$item.href}" style="color: white">&nbsp;&nbsp;&nbsp{$item.button}</a>
            </li>
            {/foreach}
        </ul>
    </div>
</div>
<div class="container">