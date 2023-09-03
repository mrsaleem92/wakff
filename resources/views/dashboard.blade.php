<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-100">
        <div class="row">
            <div class="table">
                   <table>
                       <thead>
                       <tr>
                           <td>Account Number</td>
                           <td>Currency</td>
                           <td>Balance</td>
                           <td>Actions</td>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($accounts as $row)
                           <tr>
                               <td width="150">{{$row->number}}</td>
                               <td width="150"> {{getCurrency($row->currency)['title']}}</td>
                               <td width="150">{{$row->balance}}</td>
                               <td><a class="btn btn-info" href="{{route('account',['id'=>$row->id])}}">Transactions</a></td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>
            </div>
        </div>


        </div>
    </div>
</x-app-layout>
