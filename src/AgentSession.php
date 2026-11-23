<?php
declare(strict_types=1);

namespace OmniWrap;

final class AgentSession {
    public const SOURCE_SHA256 = 'b06781a26c4469e8f12830a04d455957bf620d42b9e1df155e93ee00f293d1c9';
    public const REGISTERED_OPERATIONS_COUNT = 28;
    private int $stepsCompleted = 0;
    private int $toolCallsCompleted = 0;
    /** @param array<int, string> $allowedOperations */
    public function __construct(
        public readonly int $maxSteps = 8,
        public readonly int $maxToolCalls = 16,
        public readonly bool $allowMutations = false,
        public readonly array $allowedOperations = [],
    ) {}
    public function canInvoke(string $operationId, bool $isMutation = false): bool {
        if ($this->stepsCompleted >= $this->maxSteps || $this->toolCallsCompleted >= $this->maxToolCalls) return false;
        if ($isMutation && !$this->allowMutations) return false;
        return empty($this->allowedOperations) || in_array($operationId, $this->allowedOperations, true);
    }
    public function recordStep(int $toolCalls = 1): void {
        $this->stepsCompleted += 1;
        $this->toolCallsCompleted += max(0, $toolCalls);
    }
    /** @return array<string, mixed> */
    public function checkpoint(): array {
        return [
            'protocol_version' => 'omniwrap.agent-session/v1',
            'source_sha256' => self::SOURCE_SHA256,
            'steps_completed' => $this->stepsCompleted,
            'tool_calls_completed' => $this->toolCallsCompleted,
        ];
    }
}
