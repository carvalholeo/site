@extends('layout.app')

@section('title')
Redes sociais | Léo Carvalho
@endsection

@section('body')
<div id="redirect-social">
    <p>Parece que você quer estar mais pertinho de mim hehehe. Então, vem! </p>
    <ul class="list-unstyled">
    <li>Abaixo, tem uma lista dos meus perfis oficiais nas redes sociais que eu tenho perfil:</li>
        <ul>
        <li><a href="/github" target="_blank">GitHub</a></li>
        <li><a href="/twitter" target="_blank">Twitter</a></li>
        <li><a href="/linkedin" target="_blank">LinkedIn</a></li>
        <li><a href="/instagram" target="_blank">Instagram</a></li>
        <li><a href="/blog" target="_blank">Medium</a></li>
        <li><a href="/wordpress" target="_blank">WordPress</a> (Blog com conteúdo pessoal e religioso)</li>
        <li><a href="/pinterest" target="_blank">Pinterest</a></li>
        <li><a href="/youtube" target="_blank">YouTube</a></li>
        </ul>
    </li>
    </ul>
</div>
@endsection
