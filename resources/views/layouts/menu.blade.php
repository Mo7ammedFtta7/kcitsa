<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{!! route('jobs.index') !!}"><i class="fa fa-edit"></i><span>Jobs</span></a>
</li>

<li class="{{ Request::is('quotes*') ? 'active' : '' }}">
    <a href="{!! route('quotes.index') !!}"><i class="fa fa-edit"></i><span>Quotes</span></a>
</li>

<li class="{{ Request::is('quotes*') ? 'active' : '' }}">
    <a href="{!! route('quotes.index') !!}"><i class="fa fa-edit"></i><span>Quotes</span></a>
</li>

<li class="{{ Request::is('profiles*') ? 'active' : '' }}">
    <a href="{!! route('profiles.index') !!}"><i class="fa fa-edit"></i><span>Profiles</span></a>
</li>

<li class="{{ Request::is('vehicles*') ? 'active' : '' }}">
    <a href="{!! route('vehicles.index') !!}"><i class="fa fa-edit"></i><span>Vehicles</span></a>
</li>

<li class="{{ Request::is('myjobs*') ? 'active' : '' }}">
    <a href="{!! route('myjobs.index') !!}"><i class="fa fa-edit"></i><span>Myjobs</span></a>
</li>

