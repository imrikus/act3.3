<<<<<<< HEAD
# act3.3
#3a ETAPA: panel d’administració.Creareu un panel per a la gestió d’ofertes i d’empreses. 1-. Començareu per les ofertes: crear una pàgina que mostri totes lesofertes de la BD i els butons d’afegir, modificar i eliminar, de moment sensefuncionalitat.•Crear controlador AdminOfertaController en una subcarpeta admin:php bin/console make:controller admin'\'AdminOfertaController•Comprovar la creació del controlador i de la plantilla corresponent.•Afegir a la barra de navegació el link de la ruta del nou controlador.•Programar el controlador i la plantilla perquè en clicar Admin mostri totes les ofertes de la BD amb els botons propis de l’administrador afegir, modificar i eliminar.
2-. Doneu funcionalitat als botons, començarem pel botó modificar.•Crear la funció function modifOferta(Oferta $oferta)que rebrà l’id de l’oferta que es vol modificar@Route("/admin/oferta/{id}", name="admin_oferta_modif")•Crear la plantilla que renderitzarà l’oferta recuperada modifOferta.html.twig•Modificar el botó de la twig d’administració:<a class = "btn btn-secondary" href="{{path("admin_oferta_modif", {'id' : oferta.id})}}">Modificar</a>•Crear el formulari que permetrà la modificacióphp bin/console make:form OfertaTypedels objectes de la classe Oferta.•Comprovar la creació i les funcionspublic function buildForm(FormBuilderInterface $builder, array $options): crea un formulari amb totes les propietats de la classe.•Modificar la funció perquè cregui el formulari, amb les dades de l’oferta $form = $this→createForm(OfertaType::class, $oferta);i l’envii a la plantillareturn $this→render('admin/modifOferta.html.twig', ["oferta" => $oferta,"form" => $form-> createView()])•Moficar la plantilla perquè mostri el formulari bàsic•Comprovar que funciona, de posar-lo bonic sempre estem a temps.
Tens un error? Si sí, prova de trobar la causa.•Afegir un botó per guardar els canvis. On? En la plantilla<input type="submit" class = "btn btn-primary" value="Guardar">•Tratar el formulari actualitzant la BD a partir del formulari◦Necessitem la petició i el manager de doctrine:public function modifOferta(Oferta $oferta, Request $request, ObjectManager $manager)◦Comprobar si el formulari ha estat tractat:$form->handleRequest($request);◦Si és vàlid, apliquem els canvis en la BD i redireccionem.◦Comprobar els canvis3-.  Donar funcionalitat al botó afegir i al botó eliminar.
=======
ACTIVITAT 3.3 (avaluable 70%)
Heu rebut l'encàrreg de crear, utilitzant symfony, l'aplicació web de l'empresa JobORWork que es dedica a la gestió d'ofertes de feina.

    La creareu per etapes (sprints).
    A cada etapa l'aplicació creixerà i serà visible al git amb lliuraments (commits) dels avançaments.
    El control es farà en finalitzar les classes dels dimecres  i la del divendres.
    L'últim dia de treball d'aquesta activitat serà el dimarts 17/03.
    Es farà un examen que consistirà a afegir alguna funcionalitat a l'aplicació resultant.
    És desenvoluparà de manera individual.


1a etapa: creació de la bd i les dades de proves (20%)
Afegeix els camps següents a la BD: Oferta.titol (string 255), Empresa.nom (string 255), Candidat.estudis (string 255)

2a etapa: mostrar informació i navegar (20%)

3a etapa: afegir panel d'administració d'ofertes amb les funcionalitats bàsiques d'afegir, modificar i eliminar (20%)

4a etapa: afegir al panel d'administració les empreses, tal i com vau fer amb les ofertes a l'etapa anterior. (10%)
>>>>>>> 2cf07d1a41e1d06e387e6ab3ac72fd8e9bf631ad
