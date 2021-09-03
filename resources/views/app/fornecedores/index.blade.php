<h3>Fornecedores</h3>

@isset($fornecedores)
    @php $i = 0; @endphp
    @while($i < count($fornecedores))
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['CNPJ'] ?? ''}}
        <br>
        DDD: {{ $fornecedores[$i]['ddd'] ?? '' }} - {{ $fornecedores[0]['telefone'] ?? '' }}
        <br>
        <hr>
        @{{$i++;}}
    @endwhile
@endisset





