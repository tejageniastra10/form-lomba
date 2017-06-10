<link rel="stylesheet" href="js/bootstrapValidator.css">  
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrapValidator.js"></script>

<script type="text/javascript">
            $(document).ready(function() {
                $('#form_edit_user')
                    .bootstrapValidator({
                        
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            nama_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'Nama  tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            
                            
                            email_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'email tidak boleh kosong'
                                    }, 
                                    regexp: {
                                regexp: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/,
                                message: 'format email salah'
                            },
                                }
                            },
                            tlp_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'no telephone tidak boleh kosong'
                                    },
                                    stringLength: {
                                max: 11,
                                message: 'maksimal 11 karakter'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'karakter tidak valid'
                            },
                             regexp: {
                                regexp: /^[0-9]/,
                                message: 'harus berupa angka'
                            }
                                    
                                }
                            }, 
                            username_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'username tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            password_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'password tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            alamat_user: {
                               
                                validators: {
                                    notEmpty: {
                                        message: 'alamat tidak boleh kosong'
                                    },
                                    
                                }
                            },
                            
                        }
                    });
                });
        </script>