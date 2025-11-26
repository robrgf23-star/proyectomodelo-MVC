<?php require_once 'views/header.php'; ?>

<h1>Perfil de Usuario</h1>
<?php if ($user): ?>
    <div>
        <p><strong>ID:</strong> <?= $user['id'] ?></p>
        <p><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    </div>
<?php else: ?>
    <p>Usuario no encontrado</p>
<?php endif; ?>
<a href="index.php?action=list">← Volver a la lista</a>

<?php require_once 'views/footer.php'; ?>