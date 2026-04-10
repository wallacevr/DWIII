<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
       
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

            <!-- Configuração do Tailwind TEM que vir antes do script -->
    <script>
        tailwind = {
            config: {
                darkMode: 'class',
                safelist: [
                    'dark:bg-gray-900',
                    'dark:text-gray-100',
                    'dark:bg-black',
                    'dark:bg-gray-800'
                ]
            }
        }
    </script>

    <!-- Carregar Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
      

<!-- CSS do Filepond -->



         
        @livewireStyles

    </head>
    <body   class="font-sans antialiased" 
    
    x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
     x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
     :class="darkMode ? 'bg-gray-900 text-gray-100' : 'bg-white text-gray-900'">
  

        <div
            x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
            x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
            :class="darkMode ? 'min-h-screen bg-gray-900 text-gray-100' : 'min-h-screen bg-white text-gray-900'"
        >
                        @livewire('navigation-menu')
                        {{--
                           <!-- Page Heading -->
                           @if (isset($header))
                              <header class=" shadow bg-white text-black dark:bg-gray-900 dark:text-gray-100">
                                 <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                       {{ $header }}
                                 </div>
                              </header>
                           @endif

                        --}}

                           <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 
                              x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                    x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                    :class="darkMode ? 'min-h-screen bg-gray-900 text-gray-100' : 'min-h-screen bg-white text-gray-900'"
                              >
                              <span class="sr-only">Open sidebar</span>
                              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                              </svg>
                           </button>

                           <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen py-6 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
                              <div class="h-full px-3 py-8 my-8 overflow-y-auto 
                                 x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                       x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                       :class="darkMode ? 'min-h-screen bg-gray-900 text-gray-100' : 'min-h-screen bg-white text-gray-900'"
                                 >
                                 <ul class="space-y-2 font-medium">
                                    <li>
                                       <a href="{{route('dashboard')}}" class="flex items-center p-2  rounded-lg 
                                          x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                                x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                                :class="darkMode ? 'bg-gray-900 text-gray-100' : ' bg-white text-gray-900'"
                                          >
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                             <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                                          </svg>
                                          <span class="ms-3">Home</span>
                                       </a>
                                    </li>
                                 
                                    <li>
                                       <a href="{{route('produtos')}}" class="flex items-center p-2  rounded-lg 
                                                x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                                x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                                :class="darkMode ? 'bg-gray-900 text-gray-100' : ' bg-white text-gray-900'"
                                          >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                             <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                                        </svg>
                                          <span class="flex-1 ms-3 whitespace-nowrap">Produtos</span>
                                       
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{route('clientes')}}"   class="flex items-center p-2  rounded-lg 
                                                x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                                x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                                :class="darkMode ? 'bg-gray-900 text-gray-100' : ' bg-white text-gray-900'"
                                          >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                        </svg>

                                          <span class="flex-1 ms-3 whitespace-nowrap">Clientes</span>
                                       </a>
                                    </li>
                                    <!-- <li>
                                       <a href="#"   class="flex items-center p-2  rounded-lg 
                                                x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" 
                                                x-init="$watch('darkMode', value => localStorage.setItem('dark', value))"
                                                :class="darkMode ? 'bg-gray-900 text-gray-100' : ' bg-white text-gray-900'"
                                          >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                            </svg>

                                          <span class="flex-1 ms-3 whitespace-nowrap">Vendas</span>
                                       </a>
                                    </li> -->


                                 </ul>
                              </div>
                           </aside>

                  <div class="p-4 sm:ml-64">
                     <!-- Page Content -->
                     <main>

                           @yield('content')
                           @if(isset($slot))  
                                 {{$slot}}
                           @endif
                     </main>
                  </div>  
            
        </div>
 
        @stack('modals')
       
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script src="{{ asset('../../vendor/livewire-charts/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
         @livewireScripts  
         @stack('scripts')


    </body>
</html>
