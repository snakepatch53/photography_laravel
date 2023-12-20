@extends('layouts.app')

@section('template_title')
    Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Blog') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Blog Title</th>
										<th>Blog Subtitle</th>
										<th>Blog Image</th>
										<th>Blog Description</th>
										<th>Blog Content</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $blog->blog_title }}</td>
											<td>{{ $blog->blog_subtitle }}</td>
											<td>{{ $blog->blog_image }}</td>
											<td>{{ $blog->blog_description }}</td>
											<td>{{ $blog->blog_content }}</td>

                                            <td>
                                                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('blogs.show',$blog->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('blogs.edit',$blog->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $blogs->links() !!}
            </div>
        </div>
    </div>
@endsection
