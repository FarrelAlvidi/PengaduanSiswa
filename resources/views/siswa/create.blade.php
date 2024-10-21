<x-app-layout>
    <div class="relative flex mx-auto mt-20 max-w-[34rem] flex-col rounded-lg bg-white border border-slate-200 shadow-sm">
        <div class="relative m-2.5 items-center flex flex-col justify-center text-white h-32 rounded-md bg-slate-800">
          <div class="mb-4 text-white">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              aria-hidden="true"
              class="h-10 w-10 text-white"
            >
              <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z"></path>
              <path
                fill-rule="evenodd"
                d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </div>
          <h5 class="text-white text-xl">
            Material Tailwind PRO
          </h5>
        </div>
        <div class="p-6">
          <div class="block overflow-visible">
            <div class="relative block w-full overflow-hidden !overflow-x-hidden !overflow-y-visible bg-transparent">
              <div
                role="tabpanel"
                data-value="card"
              >
                <form class="mt-8 flex flex-col" action="{{route('siswa.store')}}" method="POST" files="true" enctype="multipart/form-data">
                    @csrf
                    <label class="block mb-2 text-sm text-slate-600">
                      Pelapor
                    </label>
                    <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Nama Pelapor"
                    name="pelapor"
                    />


                  <label class="block mb-1 text-sm text-slate-600 mt-4">
                    Terlapor
                  </label>
                  <input
                    type="text"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-20 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Terlapor" name="terlapor"
                  />

                  <div class="flex">
                    <div class="w-full md:w-8/12 mr-4">
                      <label class="block mb-1 text-sm text-slate-600 mt-4">
                        Kelas
                      </label>
                      <input
                        type="text"
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-20 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Kelas Pelapor" name="kelas"
                      />
                    </div>

                  </div>

                  <label class="mt-4 block mb-1 text-sm text-slate-600">
                    Bukti
                  </label>
                  <input
                    type="file"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-20 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Isi Laporan" name="bukti"
                  />

                  <label class="mt-4 block mb-1 text-sm text-slate-600">
                    Laporan
                  </label>
                  <input
                    type="text"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-20 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Isi Laporan" name="laporan"
                  />


                  <button type="submit" class="w-full mt-6 rounded-md bg-red-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Lapor</button>
                  <p class="mt-4 flex items-center justify-center gap-2 text-sm text-slate-500 font-light">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      aria-hidden="true"
                      class="-mt-0.5 h-4 w-4"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    Laporkan Masalah
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
