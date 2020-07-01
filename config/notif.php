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
  } elseif ($_GET['m'] == 'save') {

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
      title: 'Data Berhasil Tersimpan'
    })
  </script>";
  } elseif ($_GET['m'] == 'export') {

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
      title: 'Data Base Berhasil Di Export'
    })
    window.location.href='$domain';
  </script>";
  } elseif ($_GET['m'] == 'import') {

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
    title: 'Data Berhasil Di Import'
  })
  window.location.href='$domain';
</script>";
  } elseif ($_GET['m'] == 'hapus-sukses') {

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
      title: 'Data Base Berhasil Di Hapus'
    })
  </script>";
  } elseif ($_GET['m'] == 'ganti-sukses') {
    // session_start();
    session_destroy();
    echo "<script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 6000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
       
      }
    })
    
    Toast.fire({
      icon: 'success',
      title: 'Password anda berhasil diganti , Anda harus login kembali dengan password baru.',
    })
    window.location.href='$domain?pages/auth/?';
   
  </script>";
  } elseif ($_GET['m'] == 'ganti-gagal') {
    // session_start();
    session_destroy();
    echo "<script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 6000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
       
      }
    })
    
    Toast.fire({
      icon: 'success',
      title: 'Password anda Gagal diganti , Anda harus login kembali dengan password lama.',
    })
    window.location.href='$domain?pages/auth/?';
   
  </script>";
  }
} else {
}
