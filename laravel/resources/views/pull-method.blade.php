
<link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}" />

<div class="container">
    <div class="active" data-count="3">
        <h2>Active projects</h2>
        <ul>
            <li>Pull Method project</li>
            <li>Colemak leren</li>
            <li>VIM leren</li>
        </ul>
    </div>
    <div class="holding">
        <h2>Holding tank</h2>
        <ul>
           @foreach($projects as $project)
               <li>{{ $project }}</li>

           @endforeach
        </ul>
    </div>
</div>
