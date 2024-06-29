<div class="w-100 h-auto py-12 px-5 py-10 sm:px-8 bg-pre-dark-green overflow-hidden">
    <x-title-component :title="'What our clients say?'" class="text-center text-white"/>
    <div class="w-full md:w-4/5 mx-auto py-8 flex gap-5 items-center md:justify-center spin-div">
        {{-- Cards --}}
        <x-feedback-component 
            :profile="'Z'"
            :name="'Zeembi'"
            :date="'May 30 2023'"
            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt enim soluta itaque eius cumque vel obcaecati quidem. Similique distinctio dolor, molestiae dolores neque deleniti dolore aperiam ipsa quisquam ea quidem!'"
            :position="1"
        />
        <x-feedback-component 
            :profile="'K'"
            :name="'Kyaw Kyaw'"
            :date="'May 30 2023'"
            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt enim soluta itaque eius cumque vel obcaecati quidem. Similique distinctio dolor, molestiae dolores neque deleniti dolore aperiam ipsa quisquam ea quidem!'"
            :position="2"
        />
        <x-feedback-component 
            :profile="'M'"
            :name="'Maung Maung'"
            :date="'May 30 2023'"
            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt enim soluta itaque eius cumque vel obcaecati quidem. Similique distinctio dolor, molestiae dolores neque deleniti dolore aperiam ipsa quisquam ea quidem!'"
            :position="3"
        />
        <x-feedback-component 
            :profile="'K'"
            :name="'Kyaw Kyaw'"
            :date="'May 30 2023'"
            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt enim soluta itaque eius cumque vel obcaecati quidem. Similique distinctio dolor, molestiae dolores neque deleniti dolore aperiam ipsa quisquam ea quidem!'"
            :position="2"
        />
        <x-feedback-component 
            :profile="'M'"
            :name="'Maung Maung'"
            :date="'May 30 2023'"
            :message="'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt enim soluta itaque eius cumque vel obcaecati quidem. Similique distinctio dolor, molestiae dolores neque deleniti dolore aperiam ipsa quisquam ea quidem!'"
            :position="3"
        />
    </div>
    <div class="w-full mt-3">
        <p class="text-center">
            We hope you would like to give us a feedback.
        </p>
        <button class="block py-2 px-4 my-3 mx-auto bg-green-500 rounded text-slate-100" onclick="my_modal_5.showModal()">
            Give Feedback
        </button>
    </div>
</div>
{{-- Feedback Dialog --}}
@include('pages.rating-page')