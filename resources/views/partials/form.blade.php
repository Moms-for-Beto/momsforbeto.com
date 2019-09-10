<p class="flex flex-wrap my-6 sm:my-8">
    Hi there!
    <svg class="ml-2 h-8" fill="#1a1a1a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1.627 1.531" fill-rule="evenodd" clip-rule="evenodd" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"><path fill="none" d="M0 0h1.627v1.531H0z"/><path d="M.745.004A.43.43 0 0 1 1.171.5c.039-.019.059-.077.08-.138.042-.124.087-.255.277-.202a.147.147 0 0 1 .047.023c.047.036.06.097.048.172a.801.801 0 0 1-.083.227 1.703 1.703 0 0 1-.299.41.44.44 0 0 0-.104.204.724.724 0 0 0-.019.279.033.033 0 0 1-.025.038.032.032 0 0 1-.037-.025.776.776 0 0 1 .02-.308.49.49 0 0 1 .121-.233c.095-.092.21-.247.286-.395A.751.751 0 0 0 1.56.345c.008-.052.003-.092-.024-.112a.073.073 0 0 0-.025-.012c-.132-.037-.167.065-.2.161-.031.092-.061.181-.157.187a.425.425 0 0 1-.409.296.428.428 0 0 1-.304-.126L.433.731C.317.772.216.889.149 1.018a.787.787 0 0 0-.08.233c-.011.069-.007.129.016.167.01.018.026.031.046.037.099.027.132-.024.151-.091.007-.024.012-.048.017-.072.02-.101.04-.199.147-.2.018 0 .032.014.032.032a.031.031 0 0 1-.031.032c-.056 0-.071.073-.086.149a1.431 1.431 0 0 1-.017.076c-.029.1-.079.177-.23.135a.141.141 0 0 1-.084-.065.326.326 0 0 1-.024-.21.886.886 0 0 1 .086-.252.667.667 0 0 1 .299-.31.429.429 0 0 1 .05-.549.428.428 0 0 1 .304-.126zm.225.31a.033.033 0 0 1 0 .045.032.032 0 0 1-.045-.001.077.077 0 0 0-.032-.019.192.192 0 0 0-.05-.002.031.031 0 0 1-.033-.03.031.031 0 0 1 .03-.033.211.211 0 0 1 .068.004.117.117 0 0 1 .062.036zM.566.358a.032.032 0 0 1-.045.001C.509.347.508.326.521.314A.118.118 0 0 1 .582.278.218.218 0 0 1 .651.274a.032.032 0 0 1 .03.033.032.032 0 0 1-.034.03.194.194 0 0 0-.05.002.075.075 0 0 0-.031.019zm.002.274A.03.03 0 0 1 .574.588a.032.032 0 0 1 .045.006l.002.002C.64.613.689.622.74.622.793.623.845.615.869.597A.018.018 0 0 0 .873.592.033.033 0 0 1 .918.589a.032.032 0 0 1 .003.045L.907.647A.295.295 0 0 1 .74.686C.675.685.61.671.579.644L.568.632zm.437-.457a.365.365 0 0 0-.519 0 .367.367 0 1 0 .519 0z" fill-rule="nonzero"/></svg>

    This app allows you to look up the congressional district of an address. We will also provide a bit of additional information such as the county for the address.
</p>

<form action="{{ url('/') }}" method="post" class="sm:flex mb-6">
    {{ csrf_field() }}

    <input name="query" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="1600 Pennsylvania Ave NW, Washington, DC 20500" />

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-full sm:w-auto mt-2 sm:mt-0 sm:ml-2 py-2 sm:py-0 px-4 rounded">
    Search
    </button>
</form>
