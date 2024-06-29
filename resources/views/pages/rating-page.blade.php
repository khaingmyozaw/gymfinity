{{-- Avatar --}}
<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle w-full sm:w-3/4 md:w-2/5 h-96 p-4 mx-auto mt-6 rounded-md border border-slate-300 border-opacity-50 bg-pre-extra-green shadow">
    <div class="modal-box">
      <x-title-component :title="'Give rating?'" class="text-center text-white"/>
      <p class="text-slate-300 text-center">
          Your rating make us to build a better quality.
      </p>
      <div class="w-full">
        <div class="w-16 h-16 p-1 mx-auto border border-white border-opacity-50 rounded-full">
            <div class="w-full h-full rounded-full bg-pre-dark-green flex items-center justify-center text-3xl font-bold opacity-50">
                K
            </div>
        </div>
      </div>
    </div>
      <div class="modal-action">
        <form method="dialog">
            <div class="w-full flex items-center justify-center">
                <x-rating-component />
            </div>
            <textarea class="zeembitextarea zeembitextarea-bordered w-11/12" placeholder="Write a Feedback"></textarea>
            <div class="w-11/12">
                <button class="zeembibtn zeembibtn-outline mt-3">Cancle</button>
                <button class="zeembibtn zeembibtn-success w-auto mt-3 float-right text-slate-100">Send Feedback</button>
            </div>
        </form>
      </div>
    </div>
</dialog>