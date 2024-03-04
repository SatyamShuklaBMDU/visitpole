$(document).ready(function () {

    $('#adcform').validate({
        rules: {
            category: {
                required: true
            },
            categorylink: {
                required: true
            },
            display: {
                required: true,
            }
        }
    });

    $('#adapform').validate({
        rules: {
            title: {
                required: true
            },
            post_category: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            m_title: {
                required: true
            },
            m_desc: {
                required: true
            },
            m_key: {
                required: true
            },
            // image: {
            //     required: true
            // },
            // image1: {
            //     required: true
            // },
            date: {
                required: true
            },
            display: {
                required: true
            }
        }
    });

    $('#adpform').validate({
        rules: {
            name: {
                required: true
            },
            link: {
                required: true
            }
        }
    });


    $('#adhpform').validate({
        rules: {
            heading: {
                required: true
            },
            post_number: {
                required: true
            },
            contentshort: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            image: {
                required: true
            },
            image1: {
                required: true
            }
        }
    });

    $('#adbpform').validate({
        rules: {
            heading: {
                required: true
            },
            post_number: {
                required: true
            },
            contentshort: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            image: {
                required: true
            },
            image1: {
                required: true
            }
        }
    });

    $('#adcpform').validate({
        rules: {
            heading: {
                required: true
            },
            post_number: {
                required: true
            },
            contentshort: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            image: {
                required: true
            },
            image1: {
                required: true
            }
        }
    });

    $('#adlpform').validate({
        rules: {
            heading: {
                required: true
            },
            post_number: {
                required: true
            },
            contentshort: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            image: {
                required: true
            },
            image1: {
                required: true
            }
        }
    });

    $('#adspform').validate({
        rules: {
            heading: {
                required: true
            },
            content: {
                required: true
            },
            contentlong: {
                required: true
            },
            author: {
                required: true
            },
            image: {
                required: true
            },
            image1: {
                required: true
            },
            date: {
                required: true
            }
        }
    });

    //Add media image form validation is not working
    $('#admiform').validate({
        rules: {
            name: {
                required: true
            },
            image: {
                required: true
            }
        }
    });
});