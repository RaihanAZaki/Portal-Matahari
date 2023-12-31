<div class="mb-12 lg:mb-0 article {{ strtolower(str_replace(' ', '-', $data->kategori_article)) }}">
    <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg bg-[50%]" data-te-ripple-init data-te-ripple-color="light">
        <img src="{{ asset($data->gambar_wiki) }}" class="w-full h-80" />
        <a href="#!">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,0.2)]"></div>
        </a>
    </div>
    <h5 class="mb-4 text-lg font-bold">{{$data->nama_wiki}}</h5>
        <div class="mb-4 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500 lg:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
            {{$data->tanggal_posting}}
        </div>
        <span class="text-neutral-500 mb-1 line-clamp-2">
        {!!$data->deskripsi_wiki!!}
        </span>

    <button type="button" class="mt-1 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-[#B52544] text-white hover:bg-[#B52544] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm" data-modal-target="extralarge-modal{{$data -> id}}" data-modal-toggle="extralarge-modal{{$data -> id}}">
    Read More...
    </button>
</div>
