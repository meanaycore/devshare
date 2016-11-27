@extends('layouts.app')

@section('content')
      <table>
          <thead>
              <th>Firstname Name</th>
              <th>Last Name</th>
              <th>E-Mail</th>
              <th>User</th>
              <th>Author</th>
              <th>Admin</th>
          </thead>
          @forach ( $users as $user )
              <tr>
                  <form action="{{ route('admin.assign') }}" method="POST">
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email <input type="hidden" name="email" value="{{ $user->email }}" }}></td>
                        <td><input type="checkbox" {{ $ser->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                        <td><input type="checkbox" {{ $ser->hasRole('Author') ? 'checked' : '' }} name="role_author"></td>
                        <td><input type="checkbox" {{ $ser->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                        {{ csrf_field() }}
                        <td><button type="submit">Assign Roles</button></td>
                  </form>
             </tr>
          @endforeach
        </tbody>
      </table>
@endsection
