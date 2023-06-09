@include('header2')
<section class="flex justify-center">
    <div class="flex flex-row p-10 md:py-10 lg:w-[1000px] xl:w-[1200px]">
        <div class="w-1/2 m-10 flex flex-col">
            <div>
                <!-- replace this with <img> tag -->
                <div class="aspect-square w-full bg-slate-600"></div>
                <!-- replace this with <img> tag -->
            </div>
            <div class="text-center">
                <h1 class="text-2xl">Customer Service</h1>
                <h3 class="text-xl">Jakarta Free:</h3>
                <a class="text-xl text-blue-500 underline underline-offset-4 hover:text-blue-800" href="#">021-123123</a>
                <p>
                    Work Hour <br>
                    9.00-12.00 <br>
                    & <br>
                    13.30-16.00
                </p>
            </div>
        </div>
        <div class="w-1/2 m-10 flex flex-col text-center">
            <div>
                <!-- replace this with <img> tag -->
                <div class="aspect-square w-full bg-slate-600"></div>
                <!-- replace this with <img> tag -->
            </div>
            <h1 class="text-2xl">Email Us</h1>
            <p>at <a class="font-semibold text-blue-500 underline underline-offset-4 hover:text-blue-800" href="#">JalanPage@yahoo.com</a></p>
        </div>
    </div>
</section>
@include('footer')
