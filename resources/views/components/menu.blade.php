<li class="text-trueGray-500 hover:bg-sky-400 hover:text-white">
    <a href="{{ route('home') }}" class="py-2 px-4 text-md flex items-center">
        <span class="flex justify-center w-9">
            <i class="far fa-hospital"></i>
        </span>
        Inicio
    </a>
</li>
<li class="text-trueGray-500 hover:bg-sky-500 hover:text-white">
    <a href="{{ route('works.index') }}" class="py-2 px-4 text-md flex items-center">
        <span class="flex justify-center w-9">
            <i class="fas fa-briefcase"></i>
        </span>
        Trabaja con nosotros
    </a>
</li>

<li class="text-trueGray-500 hover:bg-sky-500 hover:text-white">
    <a href="{{ route('cotizaciones') }}" class="py-2 px-4 text-md flex items-center">
        <span class="flex justify-center w-9">
            <i class="fas fa-hand-holding-usd"></i>
        </span>
        Cotizaciones
    </a>
</li>

{{--<li class="text-trueGray-500 hover:bg-sky-500 hover:text-white">
    <a href="" class="py-2 px-4 text-md flex items-center">
        <span class="flex justify-center w-9">
            <i class="fas fa-clipboard-list"></i>
        </span>
        Programaciones
    </a>
</li>--}}

<li class="text-trueGray-500 hover:bg-sky-500 hover:text-white">
    <a href="http://clientes.clinicahys.com:8021" class="py-2 px-4 text-md flex items-center" target="_blank">
        <span class="flex justify-center w-9">
            <i class="fas fa-file-medical"></i>
        </span>
        Historia Online
    </a>
</li>

@auth
    <li class="text-trueGray-500 hover:bg-sky-500 hover:text-white">
        <a href="{{ route('profiles.curriculum') }}" class="py-2 px-4 text-md flex items-center" target="_blank">
            <span class="flex justify-center w-9">
                <i class="fas fa-file"></i>
            </span>
            Curriculum
        </a>
    </li>
@endauth
