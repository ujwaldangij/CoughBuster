<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporary View</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('message'))
                const message = "{{ session('message') }}";
                
                let iconType = 'success';
                let title = 'Results';

                // Determine the icon type based on the message content
                if (message.includes('correct')) {
                    iconType = 'success';
                } else if (message.includes('incorrect')) {
                    iconType = 'error';
                }

                Swal.fire({
                    title: title,
                    text: message,
                    icon: iconType,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the next page when "OK" is clicked
                        window.location.href = "{{ route('next.page') }}"; // Ensure this route is defined
                    }
                });
            @endif
        });
    </script>

    <!-- Optionally, if you want a manual "Next" button as well -->
    <!-- <button onclick="window.location.href='{{ route('next.page') }}'">Next</button> -->
</body>

</html>
