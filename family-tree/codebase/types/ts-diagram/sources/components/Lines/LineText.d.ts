import { VNode } from "../../../../ts-common/dom";
import { IBaseCoords, IBoxSize, ILineConfig, ILineText, ILineTextConfig } from "../../../../ts-diagram";
import { BaseShape } from "../Shapes/BaseShape";
export declare class LineText extends BaseShape implements ILineText {
    config: ILineTextConfig;
    parent: ILineConfig;
    constructor(config: ILineTextConfig, parameters?: any);
    getMetaInfo(): {
        [key: string]: string;
    }[];
    render(): VNode;
    protected setDefaults(config: ILineTextConfig): ILineTextConfig;
    protected getContent(): VNode;
    protected getSize(text: string): {
        width: number;
        height: number;
    };
    protected getCenterCoords({ width, height }: ILineTextConfig, { x, y }: IBaseCoords): IBaseCoords;
    protected getStraightCoords(sp: IBaseCoords, ep: IBaseCoords, factor?: number): IBaseCoords;
    protected getTitlePosition(line: ILineConfig, title: ILineTextConfig): IBaseCoords;
    getBox(): IBoxSize;
}
