<script src="javascript/jQuery-3.7.1.min.js"></script>
<script src="javascript/main.js"></script>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6Le7uKUpAAAAADUYlwzZ3l-tkJmTWbCKIpI54XOm', {action: 'LOGIN'});
    });
  }
</script>