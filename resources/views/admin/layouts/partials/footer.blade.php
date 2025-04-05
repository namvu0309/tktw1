<footer id="page-footer">
    <div class="content py-3">
        <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                BaByLove <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com"
                    target="_blank">TKTW</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <a class="fw-semibold" href="https://pixelcave.com/products/codebase" target="_blank">Namvu </a>
                &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/chart.js/chart.umd.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/assets/js/pages/be_pages_dashboard.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/codebase.app.min.js') }}"></script>
    <script>
        // Helpers (Select2 + Bootstrap Maxlength plugins)
        Codebase.helpersOnLoad(['jq-select2', 'jq-maxlength']);

        // Initialize CKEditor 5
        ClassicEditor
            .create(document.querySelector('#js-ckeditor5-classic'), {
                licenseKey: 'GPL',
                initialData: "<p>Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game's gameplay design followed 'closely from Dark Souls II'. Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies' attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware's previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon's Souls, now known as 'focus points' (FP). When performing spells, the players' focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players' particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players' movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.</p>",
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the classic editor.', error);
            });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện click nút xóa
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const categoryId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Bạn có chắc chắn?',
                        text: "Danh mục này sẽ bị xóa vĩnh viễn!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Có, xóa nó!',
                        cancelButtonText: 'Hủy'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit form xóa
                            document.getElementById(`delete-form-${categoryId}`).submit();
                        }
                    });
                });
            });
        });

        // Hiển thị thông báo sau khi xóa
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: "{{ session('success') }}",
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: "{{ session('error') }}",
            });
        @endif
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/themes/flat.min.css') }}">
@endpush
