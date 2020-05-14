
<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">{{ auth()->user()->name}}</p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item active" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('user.create') }}"><i class="icon fa fa-circle-o"></i> Create User</a></li>
            <li><a class="treeview-item" href="{{ route('user.index') }}"><i class="icon fa fa-circle-o"></i> Users List</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Projects</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('project.create') }}"><i class="icon fa fa-circle-o"></i> Create Project</a></li>
            <li><a class="treeview-item" href="{{ route('project.index') }}"><i class="icon fa fa-circle-o"></i> Projects List</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Project User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('projectUser.create') }}"><i class="icon fa fa-circle-o"></i> Assign Employee</a></li>
            <li><a class="treeview-item" href="{{ route('projectUser.index') }}"><i class="icon fa fa-circle-o"></i> Assignment History</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Tank Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('tank.create') }}"><i class="icon fa fa-circle-o"></i> New Tank</a></li>
            <li><a class="treeview-item" href="{{ route('tank.index') }}"><i class="icon fa fa-circle-o"></i> Tanks List</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Fish Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('fish.create') }}"><i class="icon fa fa-circle-o"></i> Add Fish</a></li>
            <li><a class="treeview-item" href="{{ route('fish.index') }}"><i class="icon fa fa-circle-o"></i> List of Fishes</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Project Tank Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('projectTank.create') }}"><i class="icon fa fa-circle-o"></i> Add Project Tank</a></li>
            <li><a class="treeview-item" href="{{ route('projectTank.index') }}"><i class="icon fa fa-circle-o"></i> All Project Tanks</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Medicine Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('medicine.create') }}"><i class="icon fa fa-circle-o"></i> Add Medicine</a></li>
            <li><a class="treeview-item" href="{{ route('medicine.index') }}"><i class="icon fa fa-circle-o"></i> List of Medicines</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Feed Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('feed.create') }}"><i class="icon fa fa-circle-o"></i> Add Feed</a></li>
            <li><a class="treeview-item" href="{{ route('feed.index') }}"><i class="icon fa fa-circle-o"></i> List of Feeds</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Equipment Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('equipment.create') }}"><i class="icon fa fa-circle-o"></i> Add Equipment</a></li>
            <li><a class="treeview-item" href="{{ route('equipment.index') }}"><i class="icon fa fa-circle-o"></i> List of Equipments</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Buy Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('buy.create') }}"><i class="icon fa fa-circle-o"></i> Add Buy</a></li>
            <li><a class="treeview-item" href="{{ route('buy.index') }}"><i class="icon fa fa-circle-o"></i> List of Buys</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Feed Usage Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('feedTank.create') }}"><i class="icon fa fa-circle-o"></i> Use Feed in a Tank</a></li>
            <li><a class="treeview-item" href="{{ route('feedTank.index') }}"><i class="icon fa fa-circle-o"></i> Feed Usage History</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Medicine Usage Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('medicineTank.create') }}"><i class="icon fa fa-circle-o"></i> Use Medicine in a Tank</a></li>
            <li><a class="treeview-item" href="{{ route('medicineTank.index') }}"><i class="icon fa fa-circle-o"></i> Medicine Usage History</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Fish Health Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('fishHealth.create') }}"><i class="icon fa fa-circle-o"></i> Add Fish Health</a></li>
            <li><a class="treeview-item" href="{{ route('fishHealth.index') }}"><i class="icon fa fa-circle-o"></i> Fish Health History</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Selling Info</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('sellHistory.create') }}"><i class="icon fa fa-circle-o"></i> Add New Sell</a></li>
            <li><a class="treeview-item" href="{{ route('sellHistory.index') }}"><i class="icon fa fa-circle-o"></i> Selling History</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
 	    <li><a class="treeview-item" href="{{ route('report.manage') }}"><i class="icon fa fa-circle-o"></i> Generate Report</a></li>
            <li><a class="treeview-item" href="{{ route('report.info') }}"><i class="icon fa fa-circle-o"></i> Project Wise Expense </a></li>
{{--            <li><a class="treeview-item" href="medicineTank.index"><i class="icon fa fa-circle-o"></i> Medicine Usage History</a></li>--}}
        </ul>
    </li>
</ul>
