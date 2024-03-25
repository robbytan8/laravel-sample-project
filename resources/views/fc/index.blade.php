@extends('layouts.master')

@section('main-content')
    <a href="{{ route('fc-create') }}" role="button">Add Family Card</a>
    <table>
        <caption>List of family card</caption>
        <thead>
        <tr>
            <th>ID</th>
            <th>Family Head Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($familyCards as $familyCard)
            <tr>
                <td>{{ $familyCard->id }}</td>
                <td>{{ $familyCard->family_head }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('more-css')

@endsection

@section('more-js')

@endsection
