<div>
    @if(session()->has('success'))
        <script>
            toastr.options = {
                "progessBar": true,
                "closeButton": true,
            }
            toastr.success("{{ session()->get('success') }}", '!ناجح', {
                timeOut: 12000
            });
        </script>
        @elseif(session()->has('erorr'))
        <div class="alert alert-danger text-center">{{ session()->get('erorr') }}</div>
        <script>
            toastr.options = {
                "progessBar": true,
                "closeButton": true,
            }
            toastr.error("{{ session()->get('erorr') }}", '!خطأ', {
                timeOut: 12000
            });
        </script>
    @endif
</div>
