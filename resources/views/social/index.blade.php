@extends('layout.app', ["current" => "construction"])

@section('title')
Redes sociais | Léo Carvalho
@endsection

@section('body')
<p>Hmm... Parece que você tentou acessar uma rede social que eu não tenho. 😱</p>
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
    </ul>
  </li>
</ul>
@endsection
