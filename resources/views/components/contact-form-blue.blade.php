<form action="" method="POST" target="_blank" class="flex flex-row flex-wrap w-full">
    <div class="lg:w-[47%] w-full mx-auto mb-8">
        <label for="name" class="block mb-2 text-md font-medium text-white">Nom & Prénom</label>
        <input type="text" id="name"
            class="bg-slate-50 border text-gray-900 text-lg lg:rounded-[18px] placeholder-[#B5CFEF] border-[#B5CFEF] block w-full py-4 px-6"
            placeholder="Entrez votre nom et prénom" required>
    </div>

    <div class="lg:w-[47%] w-full mx-auto mb-8">
        <label for="tel" class="block mb-2 text-md font-medium text-white">N° Téléphone</label>
        <input type="tel" id="tel"
            class="bg-slate-50 border text-gray-900 text-lg lg:rounded-[18px] placeholder-[#B5CFEF] border-[#B5CFEF] block w-full py-4 px-6"
            placeholder="Entrez votre N°téléphone" required>
    </div>

    <div class="lg:w-[47%] w-full mx-auto mb-8">
        <label for="email" class="block mb-2 text-md font-medium text-white">Email</label>
        <input type="email" id="email"
            class="bg-slate-50 border text-gray-900 text-lg lg:rounded-[18px] placeholder-[#B5CFEF] border-[#B5CFEF] block w-full py-4 px-6"
            placeholder="Entrez votre adresse e-mail" required>
    </div>

    <div class="lg:w-[47%] w-full mx-auto mb-8">
        <label for="services" class="block mb-2 text-md font-medium text-white">Service</label>
        <select id="services"
            class="bg-slate-50 border text-gray-900 text-lg lg:rounded-[18px] placeholder-[#B5CFEF] border-[#B5CFEF] block w-full py-4 px-6">
            <option class="choice" value="" disabled selected hidden>
                Choisissez un service...
            </option>
            <option value="angiographie">angiographie</option>
            <option value="champ visuel">champ visuel</option>
            <option value="chirurgie des strabismes">
                chirurgie des strabismes
            </option>
            <option value="chirurgie de la cataracte">
                chirurgie de la cataracte
            </option>
            <option value="chirurgie des voies lacrymales">
                chirurgie des voies lacrymales
            </option>
            <option value="echogaphie A">echogaphie A</option>
            <option value="echographie B">echographie B</option>
            <option value="laser argon">laser argon</option>
            <option value="laser slt">laser slt</option>
            <option value="laser yag">laser yag</option>
            <option value="oct angiographie">
                oct angiographie
            </option>
            <option value="tomographie (oct)">
                tomographie (oct)
            </option>
        </select>
    </div>

    <div class="lg:w-[96%] w-full mx-auto">
        <label for="email" class="block mb-2 text-md font-medium text-white">Message</label>
        <textarea name="message" id="message" class="bg-slate-50 border w-full text-gray-900 text-lg lg:rounded-[18px] placeholder-[#B5CFEF] border-[#B5CFEF] block py-4 px-6" rows="8" placeholder="Inserez votre message" required></textarea>
    </div>
    <input type="button" name="" id="btnSubmit" value="Confirmer le rendez-vous" class="form-cta mx-auto mt-10 rounded-3xl max-w-full break-words bg-[#B5CFEF] text-white text-[15px] w-full" />
</form>
