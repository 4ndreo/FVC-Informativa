<?php
/**
 *@var \Illuminate\Database\Eloquent\Collection\App\Models\Blog[] $comentarios
 */
?>
@extends('layouts.admin') {{-- Esto navega a [resources/views/layouts/main.blade.php] --}}

@section('title', 'Administrador')

@section('main')
      <section class="container py-4">
            <h1>Panel de Administración</h1>

            <h2>Comentarios</h2>
            <p>
                  <a href="{{route('admin.blog.nuevo.form')}}">Publicar nuevo comentario</a>
            </p>
            <table class="table table-bordered table-striped">
                  <thead>
                        <tr>
                              <th>ID</th>
                              <th>Usuario</th>
                              <th>Curso</th>
                              <th>Comentario</th>

                              <th>Acciones</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($comentarios as $comentario)

                        <tr>
                              <td>{{$comentario->comentario_id}}</td>
                              <td>{{$comentario->usuario}}</td>
                              <td>{{$comentario->curso}}</td>
                              <td>{{$comentario->comentario}}</td>
                              <td>
                                    <a href="{{route('admin.cursos.ver', ['id' => $comentario->comentario_id])}}" class="btn  btn-actions btn-primary"><i class="fa-solid fa-eye pe-2"></i>Ver</a>
                                    <a href="{{route('admin.cursos.editar.form', ['id' => $comentario->comentario_id])}}" class="btn  btn-actions btn-success"> <i class="fa-solid fa-pen-to-square pe-2"></i>Editar</a>
                                    <a href="{{route('admin.cursos.eliminar.confirmar', ['id' => $comentario->comentario_id])}}" class="btn  btn-actions btn-danger"><i class="fa-solid fa-trash pe-2"></i>Eliminar</a>
                              </td>
                        </tr>
                        @endforeach
                  </tbody>
            </table>
        </section>
@endsection
