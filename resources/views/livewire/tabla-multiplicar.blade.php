<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1 class="mx-5 text-center text-gray-800 text-4xl mt-6 uppercase ">Aplicaciones Distribuidas</h1>
            <div class="bg-gray-50 shadow-md m-4">
                <label class="mb-2 block m-2 p-1 ">
                    <span for="name" class="form-label font-bold mb-2 text-green-500">INGRESE LA TABLA DE MULTIPLICAR QUE
                        DESEA VISUALIZAR</label>
                <select class="m-2 w-40" name="" id="" wire:model="number">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                {{$number}}
                </label>
                {{--  <label class="mb-2 block m-2 p-1" for="">
                    <input class="px-4 py-2 bg-purple-600 text-white" type="button" value="Enviar">
                </label>  --}}
                <label for="" class="m-2 block text-2xl font-mono p-2"> Has elegido la Tabla del {{$number}}</label>
                {{-- <input wire:model="name" type="" placeholder="Ingrese el nombre " class="form-input w-1/2 rounded"
                required> --}}
                {{-- {!! Form::label($for, $text, [$options]) !!} --}}
            </div>
        </div>
    </div>
    {{--  <div>
        <p>
            {{ $site }}
            {{ $number }}
        </p>
        <input type="text" wire:model="site">
    </div>  --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="bg-white w-full rounded-lg shadow overflow-hidden ">
                <thead class="bg-gray-50  border-b border-gray-200">
                    <tr class="form-head  mb-2  uppercase text-center tracking-wider ">
                        <th class="px-4 py-3">OPERACION</th>
                        <th class="px-4 py-3">RESULTADO</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 items-center mx-auto w-full">
                    {{--  $i = 0;  --}}
                    @foreach ($res as $re)
                        <tr class="text-sm text-gray-700 text-center  ">
                            <td class="px-4 py-1">{{ $re['numero_1']. '*' . $re['numero_2']    }}</td>
                            <td class="px-4 py-1">{{ $re['resultado'] }}</td>

                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div
