<ul class="mt-6">
    <x-sidebar.link url="/index" title="Dashboard" icon="icons.dashboard" active />
    <x-sidebar.link url="/forms" title="Forms" icon="icons.clipboard" />
    <x-sidebar.link url="/cards" title="Cards" icon="icons.files" />
    <x-sidebar.link url="/charts" title="Charts" icon="icons.chart" />
    <x-sidebar.link url="/buttons" title="Buttons" icon="icons.pointer" />
    <x-sidebar.link url="/modals" title="Modals" icon="icons.squares" />
    <x-sidebar.link url="/tables" title="Tables" icon="icons.lines" />
</ul>
<x-sidebar.dropdown title="Dropdown" icon="icons.pointer" id="dropdown1">
    <x-sidebar.dropdown-link title="Create account" url="create-account" />
    <x-sidebar.dropdown-link title="forgot password" url="forgot-password" />
    <x-sidebar.dropdown-link title="404" url="404" />
    <x-sidebar.dropdown-link title="Login" url="login" />
    <x-sidebar.dropdown-link title="Blank Page" url="blank" />
</x-sidebar.dropdown>
<x-sidebar.dropdown title="Dropdown2" icon="icons.pointer"  id="dropdown2">
    <x-sidebar.dropdown-link title="Create account" url="create-account" />
    <x-sidebar.dropdown-link title="forgot password" url="forgot-password" />
    <x-sidebar.dropdown-link title="404" url="404" />
    <x-sidebar.dropdown-link title="Login" url="login" />
    <x-sidebar.dropdown-link title="Blank Page" url="blank" />
</x-sidebar.dropdown>
<x-sidebar.button />
