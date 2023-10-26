const nodemailer = require('nodemailer');

const trasnport = nodemailer.createTransport({
    host: 'smtp.office365.com',
    port: 587,
    secure: false, //TRUE para 465, FALSE para todas as outras
    auth: {
        user: 'tohelpp@hotmail.com', //conta no outlook
        pass: 'tohelp123',
    }
});

trasnport.sendMail({
    from: 'ToHelp <tohelpp@hotmail.com>', //email que envia
    to: 'geovannasbelem@gmail.com', //email que recebe
    subject: 'Confirmação de Cadastro',
    html: '<h3>Seu Cadastro foi realizado com sucesso!</h3> <br> <p>Fique por dentro de todas as novidades! Entre no <a href="#">ToHelp</a> </p>',
    text: 'Agradecemos por se juntar ao ToHelp!!'
})
.then(() => console.log('Email enviado com sucesso!'))
.catch((err) => console.log('Erro ao enviar o email', err));