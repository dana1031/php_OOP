<?php if (isset($form) && !empty($form)): ?>
    <form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>> <!--jeigu tusti $form masyvo 'attr' - tai jis tsg prides method POST-->

        <?php if (isset($form['title'])): ?>
            <h1><?php print $form['title']; ?></h1>
        <?php endif; ?>

        <!-- Field Generation Start -->
        <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
            <div>

                <?php if (isset($field['label'])): ?>
                <label><span><?php print $field['label']; ?></span>
                    <?php endif; ?>

                    <?php if ($field['type'] === 'select'): ?>
                        <div class="nes-select is-dark"> <!--nutrinti eilute, cia grynai zaidimo projektui-->
                            <select <?php print html_attr(['name' => $field_id]); ?>>
                                <option disabled selected>Pasirinkite komanda</option>
                                <?php foreach ($field['options'] as $option_id => $option): ?>
                                    <option value="<?php print $option_id; ?>" <?php print ($field['attr']['value'] ?? null) === $option_id ? 'selected' : ''; ?>>
                                        <span><?php print $option; ?></span>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div><!--nutrinti eilute, cia grynai zaidimo projektui-->

                    <?php else: ?>

                        <input <?php print html_attr((['name' => $field_id, 'type' => $field['type'], 'value' => $field['value'] ?? '']) + ($field['extras']['attr'] ?? [])); ?>>
                    <?php endif; ?>

                    <?php if (isset($field['error'])): ?>
                        <span><?php print $field['error']; ?></span>
                    <?php endif; ?>

                    <?php if (isset($field['label'])): ?>
                </label>
            <?php endif; ?>

            </div>
        <?php endforeach; ?>
        <!-- Field Generation End -->

        <!-- Button Generation Start -->
        <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
            <input <?php print html_attr(['name' => 'action', 'value' => $button_id] + $button); ?>> <!-- 'name' => 'action' todel, kad visada zinosim jog mygtukas bus skirtas actionui -->
        <?php endforeach; ?>
        <!-- Button Generation End -->

        <!-- Message Generation Start -->
        <?php if (isset($form['message'])): ?>
            <div><?php print $form['message']; ?></div>
        <?php endif; ?>
        <!-- Message Generation End -->
    </form>
<?php endif; ?>

<!--
9 eil: '??' yra shorthandinis isset. jeigu nėra masyve 'fields', grąžina tuščią masyvą, jog ne breakintų ciklas.
12 eil: Jeigu yra toks 'label' key, tai spausdins <label>.
16 eil: jeigu masyvas turi 'type' => 'select', tai ispausdins juos.
17 eil: Į f-ją paduodam (naujai sudaromą) masyvą tarp [] sklaistų, kas leidžia atrinkti tik kokius elementus/masyvus mums spausdinti į input tagą.
18 eil: foreach'inam kiekvieną $field['options'].
19 eil: Į input tagą išspausdinam automatiškai value, ir jeigu yra nurodyta kuris optionas turi būti 'selected', automatiškai tai išspausdins į tagą.
27 eil: Į f-ją paduodam (naujai sudaromą) masyvą tarp [] sklaistų, kas leidžia atrinkti tik kokius elementus/masyvus mums spausdinti į input tagą. pliusas sujungia masyvus.
30 eil: spausdins error fieldą, jeigu bus erroras submitinant formą.
13 ir 35 eil: Jeigu yra toks 'label' key, tai spausdins </label>.
-->