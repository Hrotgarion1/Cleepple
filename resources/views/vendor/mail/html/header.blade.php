<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('storage/img/sinFondo.png') }}" style="width: 5rem" class="logo" alt="Cleepple Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
