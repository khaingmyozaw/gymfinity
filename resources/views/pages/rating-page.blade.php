<div class="w-100 h-auto py-12 px-5 py-10 sm:px-8 bg-pre-dark-green">
    <x-title-component :title="'Give us your rating?'" class="text-center text-white"/>
    <p class="text-slate-300 text-center">
        Your rating make us to build better quality.
    </p>
    <div class="w-full sm:w-3/4 md:w-2/5 h-auto p-4 mx-auto mt-6 rounded-md border border-slate-300 border-opacity-50 flex flex-col items-center bg-pre-extra-green shadow">
        {{-- Avatar --}}
        <div class="w-12 h-12 zeembiavatar"> 
            <div class="ring-primary ring-offset-base-100 w-24 rounded-full ring ring-offset-2">
               <div class="w-full h-full rounded-full bg-pre-dark-green flex items-center justify-center">
                    <h3 class="text-3xl font-bold opacity-90">
                        K
                    </h3>
               </div>
            </div>
        </div>
        <x-rating-component />
        <textarea class="zeembitextarea zeembitextarea-bordered w-11/12" placeholder="Write a Feedback"></textarea>
        <div class="w-11/12">
            <button class="zeembibtn zeembibtn-success w-auto mt-3 float-right text-slate-100">Send Feedback</button>
        </div>
    </div>
</div>