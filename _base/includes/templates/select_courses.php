<?php $id = 'course_' . $i; ?>
<select name="<?= $id ?>" id="<?= $id ?>" class="course">
    <option value="---">---</option>
    <?php foreach ($courses as $course): ?>
        <option value="<?= $course ?>"><?= $course ?></option>
    <?php endforeach; ?>
</select>