@extends('layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            权限
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 开发模式</a></li>
            <li class="active">权限</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content ">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">权限列表</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ url('/permission/create') }}" class="btn">新建权限</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tbody>
                            <tr>
                                <th>标识</th>
                                <th>名称</th>
                                <th>简介</th>
                                <th>操作</th>
                            </tr>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->display_name }}</td>
                                    <td>{{ $permission->description }}</td>
                                    <td>
                                        <a href="{{ url('/permission/' . $permission->id . '/edit') }}">编辑</a>
                                        {!! Form::open(['url' => 'permission/'.$permission->id,'method'=>'DELETE', 'class'=>'form-inline pull-right']) !!}
                                        {!! Form::submit('删除') !!}
                                        {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
