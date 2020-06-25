<?php
  if (isset($_GET['m'])) {

    if ($_GET['m'] == 'success') {

      echo "<script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
    
    Toast.fire({
      icon: 'success',
      title: 'Login Success , Hi $email_session'
    })
  </script>";
    }
  } else {
  }
