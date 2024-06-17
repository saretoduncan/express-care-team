<x-layoutcomponents.layout :title="'Post Job'" :users="$user">
    <section class="my-3 text-center space-y-2">
        <h3 class="text-center font-bold text-xl">Post Job</h3>
        <p>Please enter the job details in the form below</p>
    </section>
    <section
        class="mx-3 rounded-md shadow border-x-2 border-b-2 border-t-[10px] border-t-orange-200 p-2 my-2 md:w-[400px] md:mx-auto ">
        <form action="{{ route('provider.store.job') }}" method="POST" id="jobPost">
            @csrf
            <div class="flex flex-col">
                <x-formsComponents.labels for="role">Job Role</x-formsComponents.labels>
                <x-formsComponents.selectInput name="role" id="role">
                    <option value selected disabled>Select Role</option>
                    <option value="HOME CARE AIDE CERTIFICATION">HCA</option>
                    <option value="CERTIFIED NURSING ASSISTANT">CNA</option>
                </x-formsComponents.selectInput>
                @error('role')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="">Work Type</x-formsComponents.labels>
                {{-- <select name="work_type" id="work_type">
                    <option value selected disabled> select part-time/full-time </option>
                </select> --}}
                <x-formsComponents.selectInput name="work_type" id="work_type">
                    <option value selected disabled> Part-time or Full-time </option>
                    <option value="full-time">Full-time</option>
                    <option value="part-time">Part-time</option>
                </x-formsComponents.selectInput>
                @error('work_type')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="startDate">Starting date</x-formsComponents.labels>
                <x-formsComponents.inputs type="date" id="startDate" name="start_date"
                    value="{{ old('start_date') }}" />
                @error('start_date')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="">Ending date</x-formsComponents.labels>
                <x-formsComponents.inputs type="date" id="endDate" name="end_date" value="{{ old('end_date') }}" />
                @error('end_date')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="shiftStart">Shift start</x-formsComponents.labels>
                <x-formsComponents.inputs type="time" name="shift_start" value="{{ old('shift_start') }}"
                    id="shiftStart" />
                @error('shift_start')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="shiftEnd">Shift end</x-formsComponents.labels>
                <x-formsComponents.inputs type="time" name="shift_end" value="{{ old('shift_end') }}"
                    id="shiftEnd" />
                @error('shift_end')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex flex-col">
                <x-formsComponents.labels for="">No of people needed</x-formsComponents.labels>
                <x-formsComponents.inputs type="number" min='1' name="people_needed"
                    value="{{ old('people_needed') }}" />
                @error('people_needed')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <x-formsComponents.labels for="">Payment rate per hour</x-formsComponents.labels>
                <x-formsComponents.inputs type="number" min="1" name="rate_per_hour" />
                @error('rate_per_hour')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex
                    flex-col">
                <x-formsComponents.labels for="">Payment Period</x-formsComponents.labels>
                <section class="flex space-x-4">
                    <div class="flex space-x-2">
                        <x-formsComponents.inputs type="radio" value="daily" name="payment_period" />
                        <p>Daily</p>
                    </div>
                    <div class="flex space-x-2">

                        <x-formsComponents.inputs type="radio" value="weekly" name="payment_period" />
                        <p>2 weeks</p>
                    </div>
                    <div class="flex space-x-2">

                        <x-formsComponents.inputs type="radio" value="weekly" name="payment_period" />
                        <p>Monthly</p>
                    </div>
                </section>
                @error('payment_period')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror


            </div>
            <div class="w-full flex flex-col" id="requiredCerts">
                <x-formsComponents.labels for="">Required Certification</x-formsComponents.labels>
                <div class="flex flex-wrap" id="certHolder">
                    <div class=" flex flex-wrap ">
                        <div class="px-2 py-1 text-white bg-orange-400  rounded-md flex me-1">
                            <p class="text-sm">HCA</p>
                            <div class="text-sm flex cursor-pointer items-center bg-orange-600 px-1 rounded-full ms-1">
                                <i class="fa-solid fa-close delete"></i>
                            </div>
                        </div>

                    </div>
                    <div>
                        <x-formsComponents.inputs type="text" class="ms-1" id="certInput" />
                    </div>
                </div>


            </div>

            <div class="my-2">
                <input type="submit" value="Post"
                    class="text-white bg-orange-400 px-3 text-lg  py-1 rounded-md  font-bold w-full" />
            </div>
        </form>
    </section>

</x-layoutcomponents.layout>
@vite('resources/js/postJob.js')
