@foreach($profiles as $item)
<ul>
    <li>
        <a href="{{ route('profile.show',[$item->id]) }}">{{ $item->firstname }}</a>
    </li>
    <li>{{ $item->lastname }}</li>
    <li>{{ $item->user->email }}</li>
</ul>
@endforeach