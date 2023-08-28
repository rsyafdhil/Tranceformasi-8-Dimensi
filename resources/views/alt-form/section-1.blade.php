  @extends('templates.default')

  @section('content')
  <div class="mt-24 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000] dark:bg-slate-700 dark:text-[#F7F1F1] dark:border-transparent">
      <h1 class="my-4 md:my-10 text-2xl md:text-4xl font-bold md:font-black text-center">PERSON ANALYSIS RESPONSE</h1>
  </div>
  <div class="mt-8 lg:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] text-[#000000] dark:bg-slate-700 dark:text-[#F7F1F1] dark:border-transparent">
      <h1 class="mt-8 text-center font-bold text-2xl">INSTRUKSI PENGERJAAN</h1>

      @foreach(config('form-rules.rules-section1') as $index => $rules)
      <h4 class="ml-12 mr-12 text-1xl mt-4">{!! $index . ". ". $rules !!}</h4>
      @endforeach

      <div class="mt-0 mb-8"></div>
  </div>
  {{-- action="{{ route('user.form.update', ['jawaban' => $jawaban->id, 'destination' => $nextDestination]) }}" --}}
  <form id="form" method="POST">
      @method('PATCH')
      @csrf
      @foreach( $questions as $index => $quest)
      <div class="mt-8 md:mt-12 mx-auto w-[90%] md:w-[80%] lg:w-[60%] h-fit border-2 rounded-[15px] lg:rounded-[50px] bg-[#FFFFFF] dark:bg-slate-700 dark:text-[#F7F1F1] dark:border-transparent">
          <div class="flex">
              <h1 class="ml-8 md:ml-12 lg:ml-20 mt-12 text-2xl">P</h1>
              <div class="block mt-10 mx-auto rounded-full border-2 border-slate-500 dark:border-white py-3 px-5">
                  {{ $index }}
              </div>
              <h1 class="mr-8 md:mr-12 lg:mr-20 mt-12 text-2xl">T</h1>
          </div>
          <ul>
              @for ($i = 1; $i <= 4; $i++) <li class="flex h-auto">
                  <input type="checkbox" id="{{ $index . '-1-' . $i }}" class="peer/{{ $index . '-1-' . $i }} hidden single-checkbox{{ $index }}1 check{{ $index . $i }}" name="checkbox[p][{{ $index }}]" value="{{ $quest['value-p'][($i - 1)] }}" {{ (isset($answers['p'][$index]) && $answers['p'][$index] == $quest['value-p'][$i - 1]) ? 'checked' : ''}} />
                  <label for="{{ $index . '-1-' . $i }}" class="mt-8 ml-4 md:ml-8 lg:ml-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-500 dark:border-white h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/{{ ($index) . '-1-' . $i }}:bg-green-500 peer-checked/{{ ($index) . '-1-' . $i }}:border-transparent dark:peer-checked/{{ ($index) . '-1-' . $i }}:border-white mr-1"></label>
                  <div class="mt-8 text-center block align mx-auto h-auto w-[60%] text-md border-2 border-slate-500 dark:border-white rounded-full">
                      <h1 class="mt-[6px]">{{ $quest['question'][($i - 1)] }}</h1>
                  </div>
                  <input type="checkbox" id="{{ $index . '-2-' . $i }}" class="peer/{{ $index . '-2-' . $i }} hidden single-checkbox{{ $index }}2 check{{ $index . $i }}" name="checkbox[t][{{ $index }}]" value="{{ $quest['value-t'][($i - 1)] }}" {{ (isset($answers['t'][$index]) && $answers['t'][$index] == $quest['value-t'][$i - 1]) ? 'checked' : ''}} />
                  <label for="{{ $index . '-2-' . $i }}" class="mt-8 mr-4 md:mr-8 lg:mr-[4rem] select-none cursor-pointer rounded-full border-2 border-slate-500 dark:border-white h-10 w-10 transition-colors duration-200 ease-in-out peer-checked/{{ ($index) . '-2-' . $i }}:bg-green-500 peer-checked/{{ ($index) . '-2-' . $i }}:border-transparent dark:peer-checked/{{ ($index) . '-2-' . $i }}:border-white"></label>
                  </li>
                  <br>
                  {{ $quest['value-p'][$i - 1] }}
                  <br>
                  {{ $quest['value-t'][$i - 1] }}
                  @endfor
          </ul>
          <div class="mt-0 mb-12"></div>
      </div>
      @endforeach

      {{-- kalau error --}}
      <div>
          @foreach(['checkbox', 'checkbox.p', 'checkbox.t', 'range'] as $field)
          @error($field)
          <h1 class="text-red-600">{{ $message }}</h1>
          @enderror
          @endforeach
      </div>

      <div class="mx-auto w-fit space-x-8 md:space-x-16">
          @if($previousDestination == 'go-dashboard')
          <a href="/ds" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
              Kembali
          </a>
          @else
          <button id="to-previous-button" type="button" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
              Kembali
          </button>
          @endif

          @if($nextDestination == 'section-wait')
          <a href="{{ route('user.form.show', ['jawaban' => $jawaban, 'destination' => $nextDestination]) }}" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
              Selanjutnya
          </a>
          @else
          <button id="to-next-button" type="button" class="mt-8 text-lg md:text-xl py-2 px-16 w-fit h-93 border-2 rounded-full bg-[#ffffff] text-center">
              Selanjutnya
          </button>
          @endif
      </div>

  </form>
  <h1>{{ var_dump($answers) }}</h1>
  <h1>{{ $previousDestination . "   " .  $nextDestination }}</h1>

  @include('templates.partials.script-form')
  @endsection