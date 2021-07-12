<x-app-layout>
    <div class="container py-8">
        <div class="card">
            <div class="card-header">
                <div class="card-body flex justify-between">
                    <div>
                        <h1 class="text-lg font-bold">INFORMACIÓN DE SOLICITUD - N°: {{ $quotation->id }}
                            @switch($quotation->status)
                                @case(1)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    RECEPCIONADO
                                </span>
                                @break
                                @case(2)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    ENVIADO
                                </span>
                                @break
                            @endswitch
                        </h1>
                    </div>

                    <div>

                        <form action="{{ route('quotations.status', $quotation) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cambiar estado</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center grid grid-cols-4">
                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">RUC:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->ruc }}</p>
                    </div>

                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Razón Social:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->name }}</p>
                    </div>

                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Correo electronico:</label>
                        <p class="font-bold text-lg mt-4">
                            <a href="mailto:{{ $quotation->email }}">{{ $quotation->email }}</a>
                        </p>
                    </div>
                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Telefono:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->phone }}</p>
                    </div>
                </div>

                <div class="text-center grid grid-cols-4 mt-12">
                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Contacto:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->contact }}</p>
                    </div>

                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Cargo:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->position }}</p>
                    </div>
                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">Puestos de labor:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->positions }}</p>
                    </div>
                    <div>
                        <label class="text-lg font-bold bg-emerald-500 text-gray-100 p-2 rounded-lg">N° de trabajadores:</label>
                        <p class="font-bold text-lg mt-4"> {{ $quotation->workers }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
