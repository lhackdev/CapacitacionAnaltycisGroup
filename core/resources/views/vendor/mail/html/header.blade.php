<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'AnalyticsGroup')
<img src="https://analyticsgroup.co/wp/wp-content/uploads/2018/10/logo-01.png" class="logo" alt="Analytics Group">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
