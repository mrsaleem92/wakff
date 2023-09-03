<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transactions
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="row">
            <div class="table">
                   <table>
                       <thead>
                       <tr>
                           <td>Account Number</td>
                           <td>Currency</td>
                           <td>Balance</td>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($trans as $row)
                           <tr>
                               <td width="150">{{$row->number}}</td>
                               <td width="150">{{$row->currency}}</td>
                               <td width="150">{{$row->balance}}</td>

                           </tr>
                       @endforeach
                       </tbody>
                   </table>
            </div>
        </div>

        </div>
    </div>
</x-app-layout>
