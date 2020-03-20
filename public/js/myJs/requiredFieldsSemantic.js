


    $('.ui.form')
    .form({
      on: 'blur',
      fields: {
        fullname: {
          identifier  : 'fullname',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter a value'
            }
          ]
        },
        email: {
          identifier  : 'email',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter a value'
            }
          ]
        },
        oblast: {
          identifier  : 'oblast',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please select a dropdown value'
            }
          ]
        },
        gorod: {
          identifier  : 'gorod',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please select a dropdown value'
            }
          ]
        },
        raion: {
          identifier  : 'raion',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please select a dropdown value'
            }
          ]
        }
      
      }
    })
  ;
